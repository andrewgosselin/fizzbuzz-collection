# Used negative bit-wise operations to be even shorter
for i in range(100):
    print(i%3//2*"Fizz"+i%5//4*"Buzz"or-~i)