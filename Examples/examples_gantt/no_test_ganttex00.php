<?php

/**
 * JPGraph v3.6.15
 */
require_once __DIR__ . '/../../src/config.inc.php';
use Amenadiel\JpGraph\Graph;

require_once 'jpgraph/jpgraph_gantt.php';

// A new Graph\Graph with automatic size
$graph = new GanttGraph();

//  A new activity on row '0'
$activity = new GanttBar(0, 'Activity 1', '2001-12-21', '2002-01-19');
$graph->Add($activity);

// Display the Gantt chart
$graph->Stroke();