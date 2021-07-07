# The-Fighting-Robot
Training in Smart Methods Company. The second task required is a robot base based on Internet of Things technologies. It is the second part (lower) of the Fighting Robot project and the first part (top) was the robot arm.

With five sub-tasks:
1. Create a robot base control interface using HTML, CSS, and JavaScript.
2. Create a robot base control database using php with SQL.
3. Connect the database to the internal interface.
4. Create a php page to connect the database to the devices.
5. Integration of two interfaces (RobotArm, RobotBase).

The third task required is to create a chatbot using IBM Watson and associate it with the interface.

With two sub-tasks:

1-Export as a json file.

2-Integrate with a website (RobotBaseControl.html).

***
The project allows the user to control the base of the robot by the movements of the robot base through 5 movements (forward, backward, left, right, and off). The project contains:

The project homepage (Homepage.html) is an interface for merging the RobotArm, RobotBase and Title interfaces.

The Title page (Title.html) is Title interface.

The lower part page of the project (RobotBaseControl.html) is a simple interface with 5 buttons. The user will adjust the movement of the base of the robot by pressing one of the buttons (forward, backward, left, right, and stop). Then, when a button is pressed, the movement is made to the desired destination and the values ​​are stored in the database.

The top part page of the project (index.html) is a simple interface with 6 sliders and two buttons. The user will adjust each slider according to the desired angle of the corresponding motor. Then, when you press the save button, the values ​​are stored in the database. When the play button is pressed, the robot turns on and the values ​​must be saved before powering on.

File (style2.css) for the design syntax for the lower part of the robot base.

File (style.css) for the design syntax for the top part of the robot arm.

two php files. The file (moves.php) is used to enter and update data in the database. The PHP file (connectHardware2.php) is used to retrieve data from the database used to connect to devices for the lower part of the robot base.

two php files. The Linkk.php file is used to enter and update data in the database. The PHP file (connectHardware.php) is used to retrieve data from the database used to connect to devices for the top part of the robot arm.

A file (robotMove.sql) containing the robotMove table and sql queries for some sample data entries is included for the lower part of the robot base.

A file (motors.sql) is included which contains the Motors table and sql queries for some sample data entries for the top part of the robot arm.

Background image (base.jpg) for the lower part of the robot base.

Background image (arm9.jpg) for the top part of the robot arm.

Background image (images1.jpg) for the Title interface.

skill-Talk.json for chatbot.

The interface for the project homepage of Fighting Robot:
![image](https://user-images.githubusercontent.com/47089835/124835636-50434980-df8a-11eb-8b95-1e53fc7c1f3b.png)
