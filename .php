<?php
def create_closure():
    def check_even):
        return num % 2 ==
    return check_even

# Замыкание для проверки чётности чисел
is_even = create_closure()

# Фильтрация массива чисел, оставляем только чётные числа
numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9]
even_numbers = list(filter(is_even, numbers))

    print(even_numbers)
?>