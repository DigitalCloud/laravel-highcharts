<?php

namespace RezaAr\Highcharts\Classes\Presenters;

class ChartPresenter
{
    public $display;
    public $title;
    public $transform;

    public function __construct()
    {
        $this->display = '';
        $this->transform = new JsTransformerPresenter();
        $this->title = [];
    }

    public function title($title = [])
    {
        $this->transform->title = $title;

        return $this;
    }

    public function subtitle($subtitle = [])
    {
        $this->transform->subtitle = $subtitle;

        return $this;
    }

    public function yaxis($data = [])
    {
        $this->transform->yAxis = $data;

        return $this;
    }

    public function xaxis($data = [])
    {
        $this->transform->xAxis = $data;

        return $this;
    }

    public function legend($legend = [])
    {
        $this->transform->legend = $legend;

        return $this;
    }

    public function plotOptions($plotOptions = [])
    {
        $this->transform->plotOptions = $plotOptions;

        return $this;
    }

    public function series($series = [])
    {
        $this->transform->series = $series;

        return $this;
    }

    public function chart($series = [])
    {
        $this->transform->chart = $series;

        return $this;
    }

    public function colors($series = [])
    {
        $this->transform->colors = $series;

        return $this;
    }

    public function credits($credits = [])
    {
        $this->transform->credits = $credits;

        return $this;
    }

    public function getTransform()
    {
        $this->display .= $this->transform->transform();

        return $this;
    }

    public function tes($tes)
    {
        $this->display .= $tes;

        return $this;
    }

    public function display()
    {
        $this->getTransform();
        return $this->display;
    }
}
