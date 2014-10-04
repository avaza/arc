<?php

/**
 * Bootstrap Text Input
 * @param string = HTML Field Name
 * @param string = null
 * @param string = null
 * @param array = []
 *
 * @return string
 */
Form::macro('textField', function ($name, $label = null, $value = null, $attributes = array())
{
    $element = Form::text($name, $value, fieldAttributes($name, $attributes));

    return fieldWrapper($name, $label, $element);
});

/**
 * Bootstrap Password Input
 * @param string = HTML Field Name
 * @param string = null
 * @param array = []
 *
 * @return string
 */
Form::macro('passwordField', function ($name, $label = null, $attributes = array())
{
    $element = Form::password($name, fieldAttributes($name, $attributes));

    return fieldWrapper($name, $label, $element);
});

/**
 * Bootstrap Text Area Input
 * @param string = HTML Field Name
 * @param string = null
 * @param string = null
 * @param array = []
 *
 * @return string
 */
Form::macro('textareaField', function ($name, $label = null, $value = null, $attributes = array())
{
    $element = Form::textarea($name, $value, fieldAttributes($name, $attributes));

    return fieldWrapper($name, $label, $element);
});

/**
 * Bootstrap Select Input
 * @param string = HTML Field Name
 * @param string = null
 * @param array = []
 * @param string = null
 * @param array = []
 *
 * @return string
 */
Form::macro('selectField', function ($name, $label = null, $options = [], $value = null, $attributes = array())
{
    $element = Form::select($name, $options, $value, fieldAttributes($name, $attributes));

    return fieldWrapper($name, $label, $element);
});

/**
 * Bootstrap Multi-Select Input
 * @param string = HTML Field Name
 * @param string = null
 * @param string = []
 * @param string = null
 * @param array = []
 *
 * @return string
 */
Form::macro('selectMultipleField', function ($name, $label = null, $options = [], $value = null, $attributes = array())
{
    $attributes = array_merge($attributes, ['multiple' => true]);
    $element = Form::select($name, $options, $value, fieldAttributes($name, $attributes));

    return fieldWrapper($name, $label, $element);
});

/**
 * Bootstrap Select Input populated from '/Arc/Collections/' JSON file
 * @param string = HTML Field Name
 * @param string = null
 * @param string = null
 * @param string = null
 * @param array = []
 *
 * @return string
 */
Form::macro('selectJSONField', function ($name, $label = null, $json_file = null, $value = null, $attributes = array())
{
    $options = json_decode(file_get_contents(app_path() . '/Arc/Collections/' . $json_file . '.json'));

    return Form::selectField($name, $label, $options, $value, $attributes);
});

/**
 * Bootstrap Select Input populated from Eloquent Model Query
 * @param string = HTML Field Name
 * @param string = null
 * @param string = null
 * @param array = ['name']
 * @param string = null
 * @param array = []
 *
 * @return string
 */
Form::macro('selectDBField', function ($name, $label = null, $model = null, $display_items = ['name'], $value = null, $attributes = array())
{
    $options = getOptionsFromDB($model, $display_items);

    return Form::selectField($name, 'Select ' . $label . ':', $options, $value, $attributes);
});

/**
 * Bootstrap Checkbox Input With Hidden Field
 * @param string = HTML Field Name
 * @param string = null
 * @param string = 1
 * @param string = null
 * @param array = []
 *
 * @return string
 */
Form::macro('checkboxField', function ($name, $label = null, $value = 1, $checked = null, $attributes = array())
{
    $attributes = array_merge(['id' => 'id-field-' . $name], $attributes);

    $out = "<!-- {$label} Checkbox -->";
    $out .= '<div class="checkbox';
    $out .= fieldError($name) . '">';
    $out .= '<label>';
    $out .= Form::hidden($name, 0) . Form::checkbox($name, $value, $checked, $attributes) . ' ' . $label;
    $out .= '</div>';

    return $out;
});

/**
 * Bootstrap Submit Button
 * @param string = HTML Button Text
 *
 * @return string
 */
Form::macro('submitButton', function ($button_text)
{
    $output = '<!-- ' . $button_text . ' Button --><div class="form-group">';
    $output .= Form::submit($button_text, ['class' => 'btn btn-primary']);
    $output .= '</div>';

    return $output;
});

/**
 * Wrapper function for bootstrap conventions
 * @param string = HTML Field Name
 * @param string = HTML Field Label
 * @param string = HTML Element
 *
 * @return string
 */
function fieldWrapper($name, $label, $element)
{
    $out = "<!-- {$label} Field -->";
    $out .= '<div class="form-group';
    $out .= fieldError($name) . '">';
    $out .= fieldLabel($name, $label);
    $out .= $element;
    $out .= '</div>';

    return $out;
}

/**
 * Wrapper function for bootstrap errors
 * @param string = HTML Field Name
 *
 * @return string
 */
function fieldError($field)
{
    $error = '';

    if ($errors = Session::get('errors'))
    {
        $error = $errors->first($field) ? ' has-error' : '';
    }

    return $error;
}

/**
 * Bootstrap label function
 * @param string = HTML Field Name
 * @param string = HTML Field Label
 *
 * @return string
 */
function fieldLabel($name, $label)
{
    if (is_null($label)) return '';

    $name = str_replace('[]', '', $name);

    $out = '<label for="id-field-' . $name . '" class="control-label">';
    $out .= $label . '</label>';

    return $out;
}

/**
 * Bootstrap attribute applications
 * @param string = HTML Field Name
 * @param array = []
 *
 * @return array
 */
function fieldAttributes($name, $attributes = array())
{
    $name = str_replace('[]', '', $name);

    return array_merge(['class' => 'form-control', 'id' => 'id-field-' . $name], $attributes);
}

/**
 * Create Options from Eloquent Query
 * @param string = Model Name
 * @param array = ['name']
 *
 * @return array
 */
function getOptionsFromDB($model, $display_items)
{
    $model_items = $model::all();
    $options = [0 => ""];
    foreach ($model_items as $model_item)
    {
        $show = '';
        foreach ($display_items as $display_item)
        {
            $show .= $model_item->$display_item . ' ';
        }
        $options[$model_item->id] = $show;
    }

    return $options;
}