<?phpnamespace library\webComponents;/*** progress web component* @author cyril bazin* @package cu.core* @version 1.0*/class progress extends \library\field{	public function build()	{		$widget = '';				$widget .= '<input  style="float:left;margin-right:20px;" type="text" name="'.$this->name.'"';				if (!empty($this->value))			$widget .= ' value="'.htmlspecialchars($this->value).'"';				if (!empty($this->maxLength))			$widget .= ' maxlength="'.$this->maxLength.'"';					if(!empty($this->readonly))			$widget .= ' readonly="'.$this->readonly.'"';				return $widget .= ' />		<div class="progress progress-striped active"">			<div class="bar bar-success" style="width: '.$this->value.'%;">'.$this->value.'%</div>		</div>';	}}?>