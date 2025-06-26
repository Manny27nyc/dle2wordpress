/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
	interface ITask {
		/**
		 * Process the task.
		 */
		function execute();
		/**
		 * @return boolean Is the task complete?
		 */
		function is_complete();
		/**
		 * @return string The task description, like "Converting DLE Users"
		 */
		function get_description();
		/**
		 * @return string The task progress, like "37/102, 02:37 elapsed"
		 */
		function get_progress();
		/**
		 * @return string The task results for already complete tasks
		 */
		function get_results();
	}
