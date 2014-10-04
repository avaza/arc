<?php namespace Arc\Resources;

class ResourceRepository {

    public function save(Resource $resource)
    {
        return $resource->save();
    }
} 