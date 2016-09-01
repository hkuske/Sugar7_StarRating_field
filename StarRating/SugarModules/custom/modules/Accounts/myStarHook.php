<?php

class myStarHook 
{
    /**
     * My Function
     * @param SugarBean $seed a bean that fired event
     * @param string $event event name
     * @param array $arguments event arguments 
     */
    public function myStarFunction(SugarBean &$bean, $event, $arguments)
    {
		if ($event=="before_save")
		{
			$bean->star_scoring_c = rand(0,10)*0.5;
		}
    }

}
