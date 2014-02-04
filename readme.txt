1. Include the hook class at beginning of the project
2. Include or define functions, and add them (with add_filter() and add_action() functions)
3. Declare hooks in application with do_action() (execute an action) and apply_filter() (edit a variable, should return a value)

Parameters can be send to actions and filters functions (in a key-value array). See the Hook class and the example.