<?php namespace Arc\Languages;

class LanguageRepository {

    public function save(Language $language)
    {
        return $language->save();
    }
}