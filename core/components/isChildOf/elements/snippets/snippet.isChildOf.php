<?php
$parent = $modx->getOption('parent', $scriptProperties, '0');
$resource = $modx->getOption('resource', $scriptProperties, $modx->resource->get('id'));
$includeResource = $modx->getOption('includeResource', $scriptProperties, 'false');
$isChild = $modx->getOption('isChild', $scriptProperties, 'true');
$isNotChild = $modx->getOption('isNotChild', $scriptProperties, 'false');
$toPlaceholder = $modx->getOption('toPlaceholder', $scriptProperties, '');

$parentList = $modx->getParentIds($resource);

if (in_array($parent, $parentList) || ($includeResource == 'true' && $resource == $parent)) {
	$output = $isChild;
} else {
	$output = $isNotChild;
}

if($toPlaceholder){
	$modx->setPlaceholder($toPlaceholder,$output);
} else {
	return $output;
}