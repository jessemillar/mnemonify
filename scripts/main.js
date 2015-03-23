function scissors() {
	var string = document.getElementById('input').value.split(" ");
	var composed = "";

	for (var i = 0; i < string.length; i++)
	{
		composed += string[i].charAt(0);
		composed += " ";
	}

	document.getElementById('output').value = composed;
}