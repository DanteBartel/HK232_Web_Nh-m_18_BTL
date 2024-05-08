<?php
function parseResponsiveCSS(array $css): void
{
	foreach ($css as $key => $value) {
		foreach ($value as $e) {
			echo ' ' . $key . ($key !== '' ? ':' : '') . $e;
		}
	}
}
