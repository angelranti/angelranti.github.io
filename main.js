class FoodChoice extends HTMLElement {
	connectedCallback(){
		this.innerHTML='
		<?php
			<form id="order" class="input_group_order" action="order_system.php" method="POST" autocomplete="off">
								
				<select class="drink-side" name="choice">
					<option class="choices">Drink</option>
					<option class="choices" value="Pepsi">Pepsi</option>
					<option class="choices" value="Coke">Coke</option>
					<option class="choices" value="Sprite">Sprite</option>
				</select>
				
				<select class="size-side" name="choice">
					<option class="choices">Size</option>
					<option class="choices" value="Pepsi">Pepsi</option>
					<option class="choices" value="Coke">Coke</option>
					<option class="choices" value="Sprite">Sprite</option>
				</select>
				
				
				
				<select type="number" class="drinkchoices-field" name="quantity">
					<option class="choices">Quantity</option>
					<option class="choices" value="1">1</option>
					<option class="choices" value="2">2</option>
					<option class="choices" value="3">3</option>							
				</select>
				<button class="submit-btn" type="submit" name="submit">Order</button>	
				
											
			</form>
		?>
		'
	}
}

customElements.define('food_choice',FoodChoice)