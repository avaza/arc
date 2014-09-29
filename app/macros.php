<?php

Form::macro("check", function($name, $value = 1, $checked = null, $options = []){
    return Form::hidden($name, 0).Form::checkbox($name, $value, $checked, $options);
});

Form::macro("select_json", function($name, $json_filename, $selected = null, $options = []){
    $select_options = json_decode(file_get_contents(app_path() . '/Arc/Collections/' . $json_filename . '.json'));
    return Form::select($name, $select_options, $selected, $options);
});

Form::macro("select_db", function($name, $model, $display = ['name'], $selected = null, $options = []){
    $items = $model::all();
    $select_options = [];
    foreach($items as $item){
        $show = '';
        foreach($display as $itm){
            $show .= $item->$itm . ' ';
        }
        $select_options[$item->id] = $show;
    }
    return Form::select($name, $select_options, $selected, $options);
});