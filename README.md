<h4>Follow these steps to install project</h4>

<ul>
	<li>
		First clone project in your local server<br>
		<strong>git clone https://github.com/captainwasi123/task.git</strong>
		<br><br>
	</li>
	<li>
		Create database in phpmyadmin with the name of "db_task"
		<br><br>
	</li>
	<li>
		Run this command in project directory<br>
		<strong>composer update</strong>
		<br><br>
	</li>
	<li>
		change the name if <strong>.env.example</strong> to <strong>.env</strong> 
		<br><br>
	</li>
	<li>
		You should run migrations for database tables in project directory<br>
		<strong>php artisan migrate</strong>
		<br><br>
	</li>
	<li>
		You should run seeder for default data<br>
		<strong>php artisan db:seed --class=DefaultDataInsert</strong>
		<br><br>
	</li>
	<li>
		Now your project is ready to run. You don`t need to run <strong>artisan serve</strong> command.
		Just open this URL. (make sure apache is running)<br>
		<strong>http://localhost/task/</strong>
		<br><br>
	</li>
</ul>