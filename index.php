<?php 
include( 'inc/hook.php' );
include( 'functions.php' );
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Hook examples</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
	</head>
	<body>
		<h1>Hook Class</h1>
		<h3>How to use the hook class ?</h3>
		<ol>
			<li>Include the class</li>
			<li>Declare the function to execute on hooks</li>
			<li>Implement hooks in application</li>
		</ol>
		
		<h3>Do action example</h3>
		<p>
			Here execute action : 
			<i><?php do_action( 'do_action_example' ); ?></i>
		</p>
		
		<h3>Apply filter example</h3>
		<p>
			Here, edit a var (init to "hello") to display, i want to add " world" to this sentence:
			<i><?php echo apply_filter( 'apply_filter_example', "hello", array( 'sentence_end' => ' world' ) ); ?></i>
		</p>
		<br/>
		<h3>To do more</h3>
		<ul>
			<li>
				Function class ( xx->get_hook() ) to get list of hooks, and functions declare foreach hook : 
				<br/>
				<?php 
				global $hook; 
				print_r( $hook->get_hook() );
				?>
			</li>
		</ul>
	</body>
</html>
