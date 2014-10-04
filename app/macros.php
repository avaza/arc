<?php
/**
 * Creates a checkbox input with a hidden field named the same to ensure data is sent on submit
 */
Form::macro("check", function ($name, $value = 1, $checked = null, $options = [])
{
    return Form::hidden($name, 0) . Form::checkbox($name, $value, $checked, $options);
});

/**
 * Creates a drop-down with a selection from .json file in Arc/Collections Folder
 */
Form::macro("select_json", function ($name, $json_filename, $selected = null, $options = [])
{
    $select_options = json_decode(file_get_contents(app_path() . '/Arc/Collections/' . $json_filename . '.json'));

    return Form::select($name, $select_options, $selected, $options);
});

/**
 * Creates a drop-down with a selection from a database
 */
Form::macro("select_db", function ($name, $model, $display = ['name'], $selected = null, $options = [])
{
    $items = $model::all();
    $select_options = ["Select {$model} .."];
    foreach ($items as $item)
    {
        $show = '';
        foreach ($display as $itm)
        {
            $show .= $item->$itm . ' ';
        }
        $select_options[$item->id] = $show;
    }

    return Form::select($name, $select_options, $selected, $options);
});

/**
 * Creates a datepicker input type
 */
Form::macro('date', function ($name, $value = null, $options = [])
{
    $options['data-date-format'] = "yyyy-mm-dd";
    $wrap_top = '<div class="input-group ' . $name . '">';
    $field = Form::text($name, $value, $options);
    $wrap_bot = '<span class="input-group-addon"><i class="icon-calendar bigger-110"></i></span></div>';
    $script = '<script type="text/javascript">$(".input-group.' . $name . '").datepicker({autoclose:true});</script>';

    return $wrap_top . $field . $wrap_bot . $script;
});

Form::macro('addressFields', function ($fields = [])
{
    $default_fields = [
        'street_1' => 'Street 1:',
        'street_2' => 'Street 2:',
        'building' => 'Building Name:',
        'suite'    => 'Suite:',
    ];
    $fields = array_merge($default_fields, $fields);
    $output = '<!-- Address Form Fields -->';
    foreach ($fields as $name => $label)
    {
        $output .= Form::textField($name, $label);
    }
    $output .= Form::textField('city', 'City:');
    $output .= Form::selectJSONField('state', 'Select State:', 'states');
    $output .= Form::textField('zip', 'Zip Code:');

    return $output;

});