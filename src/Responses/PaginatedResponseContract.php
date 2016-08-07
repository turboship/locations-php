<?php

namespace TurboShip\Locations\Responses;


interface PaginatedResponseContract
{

    public function getData();
    public function setData($data);
    public function getTotal();
    public function setTotal($total);
    public function getPerPage();
    public function setPerPage($per_page);
    public function getCurrentPage();
    public function setCurrentPage($current_page);
    public function getLastPage();
    public function setLastPage($last_page);
    public function getNextPageUrl();
    public function setNextPageUrl($next_page_url);
    public function getPrevPageUrl();
    public function setPrevPageUrl($prev_page_url);
    public function getFrom();
    public function setFrom($from);
    public function getTo();
    public function setTo($to);
}