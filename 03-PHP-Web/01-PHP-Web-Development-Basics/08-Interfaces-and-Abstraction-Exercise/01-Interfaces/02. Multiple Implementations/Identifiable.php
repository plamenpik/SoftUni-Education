<?php

interface Identifiable
{
    /**
     * @param string $id
     */
    public function setId(string $id): void;
}