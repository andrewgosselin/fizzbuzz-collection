// See https://aka.ms/new-console-template for more information
for (int i = 0; i < 100; i++) {
    string ret = "";
    if (i % 3 == 0) {
        ret += "Fizz";
    }
    if (i % 5 == 0) {
        ret += "Buzz";
    }
    if (ret.Length > 0) {
        Console.WriteLine(ret);
        continue;
    }
    Console.WriteLine(i.ToString());
}