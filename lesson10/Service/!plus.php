<?php

class Plus extends Term {
    public function calc() {
        return $this->childrenLeft->calc()+$this->childrenRight->calc();
    }
}