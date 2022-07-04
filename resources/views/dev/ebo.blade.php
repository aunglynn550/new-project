<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="new/ebo.css">

    <script type="module" src="{{ asset('js/ebo/app.js') }}" defer></script>
</head>
<body>
<div id="controls">
	<div>
		<h2>Element-Based Offsets<br /><small>Where's #target?</small></h2>
		<dl>
			<dt><label for="edge">Edge</label></dt>
			<dd>
				<select name="edge" id="edge">
					<option value="start">start</start>
					<option value="end" selected>end</option>
				</select>
			</dd>
			<dt><label for="threshold">Threshold</label></dt>
			<dd>
				<input type="range" min="0" max="2" step="0.01" name="threshold" id="threshold" value="0" />
			</dd>
		</dl>
		<pre><code>selector(#target) <output for="edge">end</output> <output for="threshold">0.00</output></code></pre>
	</div>
</div>

<div id="browser">
	<main>
		<div class="box" data-edge="end" data-threshold="0">
			<p><output>#target</output> is positioned at the <output for="edge">end</output> edge, and has an intersection threshold of <output for="threshold">0.00</output></p>
		</div>
	</main>
	<aside id="scrollbar">
		<div id="thumb"></div>
	</aside>
</div>
</body>
</html>