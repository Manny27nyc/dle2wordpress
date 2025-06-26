/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
	require(__MODEL_GEN__ . '/DlePostGen.class.php');

	/**
	 * The DlePost class defined here contains any
	 * customized code for the DlePost class in the
	 * Object Relational Model.  It represents the "dle_post" table
	 * in the database, and extends from the code generated abstract DlePostGen
	 * class, which contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * @package My QCubed Application
	 * @subpackage DataObjects
	 *
	 */
	class DlePost extends DlePostGen {
		/**
		 * Default "to string" handler
		 * Allows pages to _p()/echo()/print() this object, and to define the default
		 * way this object would be outputted.
		 *
		 * Can also be called directly via $objDlePost->__toString().
		 *
		 * @return string a nicely formatted string representation of this object
		 */
		public function __toString() {
			return sprintf('DlePost Object %s',  $this->intId);
		}

		/**
		 * @return WpUsers The Wordpress user for this DLE post author.
		 */
		public function LoadWpUser() {
			$objDleUsers = DleUsers::LoadByName($this->Autor);
			if (!$objDleUsers) {
				return null;
			}
			return WpUsers::QuerySingle(QQ::Equal(QQN::WpUsers()->UserEmail, $objDleUsers->Email), QQ::Clause(QQ::LimitInfo(1)));
		}

		/**
		 * @return WpPosts|null The WpPosts object, that is a copy of this DLE post.
		 */
		public function LoadWpPosts() {
			$objWpUsers = $this->LoadWpUser();
			if (!$objWpUsers) {
				return null;
			}
			return WpPosts::QuerySingle(QQ::AndCondition(
				QQ::Equal(QQN::WpPosts()->PostAuthor, $objWpUsers->Id)
				, QQ::Equal(QQN::WpPosts()->PostDate, $this->Date)
				, QQ::Equal(QQN::WpPosts()->PostName, $this->Id . '-' . $this->AltName)
			), QQ::Clause(QQ::LimitInfo(1)));
		}

		/**
		 * @return int[] The array of the WP categories for this DLE post.
		 */
		public function LoadWpTermsArray() {
			$objWpTermsArray = array();
			$intDleCategoryIdArray = explode(",", $this->Category);
			if ($intDleCategoryIdArray) foreach ($intDleCategoryIdArray as $intDleCategoryId) {
				$objDleCategory = DleCategory::Load($intDleCategoryId);
				if (!$objDleCategory) {
					continue;
				}
				$objWpTerms = $objDleCategory->LoadWpTerms();
				if (!$objWpTerms) {
					continue;
				}
				$objWpTermsArray[$objWpTerms->TermId] = $objWpTerms;
			}
			return $objWpTermsArray;
		}

		public function GetDleCategoryIdArray() {
			return explode(",", $this->Category);
		}

		// Override or Create New Load/Count methods
		// (For obvious reasons, these methods are commented out...
		// but feel free to use these as a starting point)
/*
		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return an array of DlePost objects
			return DlePost::QueryArray(
				QQ::AndCondition(
					QQ::Equal(QQN::DlePost()->Param1, $strParam1),
					QQ::GreaterThan(QQN::DlePost()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a single DlePost object
			return DlePost::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DlePost()->Param1, $strParam1),
					QQ::GreaterThan(QQN::DlePost()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function CountBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a count of DlePost objects
			return DlePost::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::DlePost()->Param1, $strParam1),
					QQ::Equal(QQN::DlePost()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses) {
			// Performing the load manually (instead of using QCubed Query)

			// Get the Database Object for this Class
			$objDatabase = DlePost::GetDatabase();

			// Properly Escape All Input Parameters using Database->SqlVariable()
			$strParam1 = $objDatabase->SqlVariable($strParam1);
			$intParam2 = $objDatabase->SqlVariable($intParam2);

			// Setup the SQL Query
			$strQuery = sprintf('
				SELECT
					`dle_post`.*
				FROM
					`dle_post` AS `dle_post`
				WHERE
					param_1 = %s AND
					param_2 < %s',
				$strParam1, $intParam2);

			// Perform the Query and Instantiate the Result
			$objDbResult = $objDatabase->Query($strQuery);
			return DlePost::InstantiateDbResult($objDbResult);
		}
*/



		// Override or Create New Properties and Variables
		// For performance reasons, these variables and __set and __get override methods
		// are commented out.  But if you wish to implement or override any
		// of the data generated properties, please feel free to uncomment them.
/*
		protected $strSomeNewProperty;

		public function __get($strName) {
			switch ($strName) {
				case 'SomeNewProperty': return $this->strSomeNewProperty;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		public function __set($strName, $mixValue) {
			switch ($strName) {
				case 'SomeNewProperty':
					try {
						return ($this->strSomeNewProperty = QType::Cast($mixValue, QType::String));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				default:
					try {
						return (parent::__set($strName, $mixValue));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
*/


		// Initialize each property with default values from database definition
/*
		public function __construct()
		{
			$this->Initialize();
		}
*/
	}
?>