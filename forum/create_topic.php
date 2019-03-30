<?php
//create_cat.php
include 'connect.php';
include 'header.php';


echo "<h2>Create a topic</h2>";
if(isset($_SESSION['signed_in']) == false)
{
	echo "You have to be signed in.";
}
else
{
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{	
		$sql = "SELECT
					cat_id,
					cat_name,
					cat_description
				FROM
					categories";
		
		$result = mysqli_query($con, $sql);
		
		if(!$result)
		{
			echo "Error.";
		}
		else
		{
			if(mysqli_num_rows($result) == 0)
			{
				if($_SESSION['user_level'] == 1)
				{
					echo 'You have not created categories.';
				}
				else
				{
					echo 'There are no categories.';
				}
			}
			else
			{
		
				echo '<form method="post" action="">
					Subject: <input type="text" name="topic_subject" />
					Category:'; 
				
				echo '<select name="topic_cat">';
					while($row = mysqli_fetch_array($result))
					{
						echo "<option value=\"" . $row['cat_id'] . "\">" . $row['cat_name'] . "</option>";
					}
				echo '</select>';	
					
				echo 'Message: <textarea name="post_content" /></textarea>
					<input type="submit" value="Create topic" />
				 </form>';
			}
		}
	}
	else
	{
		//start the transaction
		$query  = "BEGIN WORK;";
		$result = mysqli_query($con, $query);
		
		if(!$result)
		{
			//Damn! the query failed, quit
			echo 'An error occured while creating your topic. Please try again later.';
		}
		else
		{
		
	
			//the form has been posted, so save it
			//insert the topic into the topics table first, then we'll save the post into the posts table
			$sql = "INSERT INTO 
                        topics(topic_subject,
                               topic_date,
                               topic_cat,
                               topic_by)
                   VALUES('" . mysql_real_escape_string($_POST['topic_subject']) . "',
                               NOW(),
                               '" . mysql_real_escape_string($_POST['topic_cat']) . "',
                               '" . $_SESSION['user_id'] . "'
                               )";
					 
			$result = mysqli_query($con, $sql);
			if(!$result)
			{
				//something went wrong, display the error
				echo "An error occured while inserting your data. Please try again later." ;
				$sql = "ROLLBACK;";
				$result = mysql_query($con, $sql);
			}
			else
			{
				//the first query worked, now start the second, posts query
				//retrieve the id of the freshly created topic for usage in the posts query
				$topicid = mysqli_insert_id($con);
				
				$sql = "INSERT INTO
							posts(post_content,
								  post_date,
								  post_topic,
								  post_by)
						 VALUES('" . mysql_real_escape_string($_POST['post_content']) . "',
								  NOW(),
								  '" . $topicid . "',
								  '" . $_SESSION['user_id'] . "')";
				$result = mysqli_query($con, $sql);
				
				if(!$result)
				{
					//something went wrong, display the error
					echo "An error occured while inserting your post. Please try again later." . mysql_error();
					$sql = "ROLLBACK;";
					$result = mysqli_query($con, $sql);
				}
				else
				{
					$sql = "COMMIT;";
					$result = mysqli_query($con, $sql);
						
					//after a lot of work, the query succeeded!
					echo "You have successfully created a new topic";
				
				}
			}
		}
	}
}

include 'footer.php';
?>