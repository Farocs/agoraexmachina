<?phpnamespace library\webComponents;/*** select web component* @author cyril bazin* @package cu.core*/class selectmultiple extends \library\field{	protected $value = null;	protected $values = array();	protected $blank = true;		public function build()	{				$widget = '';				$widget .= '<select class="form-control" name="'.$this->name.'" class="selectpicker" multiple>';				if($this->blank == true)		    $widget .= "<option value=''></option>";		if($this->values <> "")    		foreach($this->values as $key=>$val)    		{    			$selected = ($key == $this->value) ? "selected='selected'" : "";    				$widget .= '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';        				     		}				return $widget .= ' </select>';	}}?>