<?php

use App\Models\{Admin,
    Category,
    City,
    Country,
    Language,
    Nationality,
    Product,
    Project,
    Service,
    Setting,
    Skill,
    User,
    Visa,
    VisaPrice};
use App\Http\Requests\UserRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

//use Spatie\Permission\Models\Role;



function
storageImage($file, $default = '') // get the image from the storage driver
{
    if (Str::contains($file, 'picsum.photos'))
        return $file;
    if (!empty($file)) {
        return str_replace('\\', '/', Storage::disk('public')->url($file));
    }

    return $default;
}

function getSVG($filepath, $class = '')
{
    if (!is_string($filepath) || !file_exists($filepath)) {
        return '';
    }

    $svg_content = file_get_contents($filepath);

    $dom = new \DOMDocument();
    $dom->loadXML($svg_content);

    // remove unwanted comments
    $xpath = new \DOMXPath($dom);
    foreach ($xpath->query('//comment()') as $comment) {
        $comment->parentNode->removeChild($comment);
    }

    // remove unwanted tags
    $title = $dom->getElementsByTagName('title');
    if ($title['length']) {
        $dom->documentElement->removeChild($title[0]);
    }
    $desc = $dom->getElementsByTagName('desc');
    if ($desc['length']) {
        $dom->documentElement->removeChild($desc[0]);
    }
    $defs = $dom->getElementsByTagName('defs');
    if ($defs['length']) {
        $dom->documentElement->removeChild($defs[0]);
    }

    // remove unwanted id attribute in g tag
    $g = $dom->getElementsByTagName('g');
    foreach ($g as $el) {
        $el->removeAttribute('id');
    }
    $mask = $dom->getElementsByTagName('mask');
    foreach ($mask as $el) {
        $el->removeAttribute('id');
    }
    $rect = $dom->getElementsByTagName('rect');
    foreach ($rect as $el) {
        $el->removeAttribute('id');
    }
    $path = $dom->getElementsByTagName('path');
    foreach ($path as $el) {
        $el->removeAttribute('id');
    }
    $circle = $dom->getElementsByTagName('circle');
    foreach ($circle as $el) {
        $el->removeAttribute('id');
    }
    $use = $dom->getElementsByTagName('use');
    foreach ($use as $el) {
        $el->removeAttribute('id');
    }
    $polygon = $dom->getElementsByTagName('polygon');
    foreach ($polygon as $el) {
        $el->removeAttribute('id');
    }
    $ellipse = $dom->getElementsByTagName('ellipse');
    foreach ($ellipse as $el) {
        $el->removeAttribute('id');
    }

    $string = $dom->saveXML($dom->documentElement);

    // remove empty lines
    $string = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $string);

    $cls = array('svg-icon');
    if (! empty($class)) {
        $cls = array_merge($cls, explode(' ', $class));
    }


    echo '<span class="'.implode(' ', $cls).'"><!--begin::Svg Icon | path:'.$filepath.'-->'.$string.'<!--end::Svg Icon--></span>';
}
