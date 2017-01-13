<?php
	require 'quadre.php';

	Class Tauler
	{
		private $peces=array();
		private $tipus;
		private $nRows=null;
		private $nCols=null;
		private $matrix = array();

		function __construct($nRows,$nCols,$tipus)
		{
			$this->tipus=$tipus;
			switch ($this->tipus) 
			{
				case 'escac': $this->escac($nRows,$nCols,$tipus);
					break;
				
				case 'aleat':$this->aleat($nRows,$nCols,$tipus);

				default:
					break;
			}


		}

		function escac($nRows,$nCols,$tipus)
		{
			$this->nRows=$nRows;
			$this->nCols=$nCols;
			$color=true;
			echo '<table border=1>';			
			for($crows=0;$crows<$nRows;$crows++)
			{
				echo '<tr>';
				for($ccols=0;$ccols<$nCols;$ccols++)
				{
					$this->matrix[$ccols][$crows]=new Quadre('black');
					if($color)
					{
						echo '<td style="padding:40px;background-color:black"></td>';
						$color=false;
					}else{
						echo '<td style="background-color:white;"></td>';
						$color=true;
					}
					
				}
			}
			echo '</tr></table>';

		}

		function aleat($nRows,$nCols,$tipus)
		{
			/*$this->nRows=$nRows;
			$this->nCols=$nCols;
			$color=true;
			echo '<table border=1>';			
			for($crows=0;$crows<$nRows;$crows++)
			{
				echo '<tr>';
				for($ccols=0;$ccols<$nCols;$ccols++)
				{
					$this->matrix[$ccols][$crows]=new Quadre('black');
					if($color)
					{
						echo '<td style="padding:40px;background-color:black"></td>';
						$color=false;
					}else{
						echo '<td style="background-color:white;"></td>';
						$color=true;
					}
					
				}
			}
			echo '</tr></table>';*/
		}

		function show()
		{

		}
	}