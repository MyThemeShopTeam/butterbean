<# if ( data.label ) { #>
	<span class="butterbean-label">{{ data.label }}</span>
<# } #>

<# if ( data.description ) { #>
	<span class="butterbean-description">{{{ data.description }}}</span>
<# } #>

<ul class="butterbean-radio-list">

	<# _.each( data.choices, function( label, choice ) { #>

		<li>
			<input type="radio" id="{{ data.field_name }}_{{ choice }}" value="{{ choice }}" name="{{ data.field_name }}" <# if ( data.value === choice ) { #> checked="checked" <# } #> />
			<label for="{{ data.field_name }}_{{ choice }}">{{ label }}</label>
		</li>

	<# } ) #>

</ul>
