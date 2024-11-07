def calculate_pizza_cost(size, toppings_count):

    LARGE_COST = 6.00
    EXTRA_LARGE_COST = 10.00
    TOPPING_COSTS = {1: 1.00, 2: 1.75, 3: 2.50, 4: 3.35}
    HST_RATE = 0.13

    if size.lower() == 'large':
        pizza_cost = LARGE_COST
    elif size.lower() == 'extra large':
        pizza_cost = EXTRA_LARGE_COST
    else:
        print("Make sure you have the right input for pizza size.")
        return

    if toppings_count in TOPPING_COSTS:
        toppings_cost = TOPPING_COSTS[toppings_count]
    else:
        print("Make sure you have the right input for the number of toppings (1 to 4).")
        return

    subtotal = pizza_cost + toppings_cost
    tax = subtotal * HST_RATE
    total = subtotal + tax
    
    print(f"Subtotal: ${subtotal:.2f}")
    print(f"Tax (HST 13%): ${tax:.2f}")
    print(f"Total Cost: ${total:.2f}")

size = input("Enter pizza size (large or extra large): ")
try:
    toppings_count = int(input("Enter number of toppings (1 to 4): "))
except ValueError:
    print("Make sure you have the right input for the number of toppings (1 to 4).")
else:
    calculate_pizza_cost(size, toppings_count)
