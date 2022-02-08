<?php

    class IdentityMap
    {
        private $identityMap = [];
     
        public function add(Object $obj)
        {
            $key = $this->getGlobalKey(get_class($obj), $obj->getId());
     
            $this->identityMap[$key] = $obj;
        }
     
        public function get(string $classname, $id)
        {
            $key = $this->getGlobalKey($classname, $id);
     
            if (isset($this->identityMap[$key])) {
                return $this->identityMap[$key];
            }
     
            throw new EmptyCacheException();
        }
     
        private function getGlobalKey(string $classname, $id)
        {
            return sprintf('%s.%d', $classname, $id);
        }
    }

