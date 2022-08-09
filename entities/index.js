$(function() {
	$.getJSON( "../data/entities.json", function( entities ) {
		
		// Show default entity
		setEntData(entities[0]);

		// Generate entity list
		$.each(entities, function( index, ent ) {
			$("#entlist").append(`<li><a class="test" href="javascript:void(0);">${ent.name}</a></li>`);
		});

		// Configure entity list link clicks
		$("#entlist a").click( function() {
			setEntData(entities.find((o) => { return o["name"] === $(this).text() }));
			document.body.scrollTop = document.documentElement.scrollTop = 0;
		});
	});

	function setEntData(ent)
	{
		$("#name").html(ent.name);
		$("#desc").html(ent.desc);

		// Show Properties
		var propListHtml = "";
		$.each(ent.properties, function( index, prop) {
			var propString = "";
			propString += `<strong>${prop.name}</strong> (<em>${prop.type}</em>) ${prop.desc}`;
			
			if( prop.defaultvalue && !prop.values )
			{
				propString += ` (default:  ${prop.defaultvalue})`;
			}

			if( prop.values )
			{
				propString += `<br /><br /><ul style="list-style-type:none">`;
				$.each(prop.values, function( index, value ) {
					if( prop.defaultvalue == value.value )
					{
						propString += `<li><span style="color: rgb(0, 128, 0);">${value.value} - ${value.desc} (default)</span></li>`;
					}
					else
					{
						propString += `<li>${value.value} - ${value.desc}</li>`;
					}
				});
				propString += `</ul><br />`;
			}

			propListHtml += `<li>${propString}</li>`;
		});

		$("#proplist").html(propListHtml);

		// Show Flag Values
		var flagHtml = "";
		$.each(ent.flags, function( index, flag ) {
			flagHtml += `<li><strong>${flag.value}</strong> - ${flag.desc}<br></li>`;
		});
		$("#flaglist").html(flagHtml);
	}
});
