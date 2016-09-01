{*
/*********************************************************************************
 Stars05
 ********************************************************************************/
*}
<span class="sugar_field" id="{{sugarvar key='name'}}">
{assign var="value" value={{sugarvar key='value' string=true}} }
{if empty($value) || $value < 0.5}
<img src="custom/include/SugarFields/Fields/Stars05/0-0-stars.png" />
{elseif $value >= 0.5 && $value < 1.0}
<img src="custom/include/SugarFields/Fields/Stars05/0-5-stars.png" />
{elseif $value >= 1.0 && $value < 1.5}
<img src="custom/include/SugarFields/Fields/Stars05/1-0-stars.png" />
{elseif $value >= 1.5 && $value < 2.0}
<img src="custom/include/SugarFields/Fields/Stars05/1-5-stars.png" />
{elseif $value >= 2.0 && $value < 2.5}
<img src="custom/include/SugarFields/Fields/Stars05/2-0-stars.png" />
{elseif $value >= 2.5 && $value < 3.0}
<img src="custom/include/SugarFields/Fields/Stars05/2-5-stars.png" />
{elseif $value >= 3.0 && $value < 3.5}
<img src="custom/include/SugarFields/Fields/Stars05/3-0-stars.png" />
{elseif $value >= 3.5 && $value < 4.0}
<img src="custom/include/SugarFields/Fields/Stars05/3-5-stars.png" />
{elseif $value >= 4.0 && $value < 4.5}
<img src="custom/include/SugarFields/Fields/Stars05/4-0-stars.png" />
{elseif $value >= 4.5 && $value < 5.0}
<img src="custom/include/SugarFields/Fields/Stars05/4-5-stars.png" />
{else}
<img src="custom/include/SugarFields/Fields/Stars05/5-0-stars.png" />
{/if}
</span>
