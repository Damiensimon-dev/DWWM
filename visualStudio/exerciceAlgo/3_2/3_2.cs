using System;

namespace _3_2
{
    class Program
    {
        static void Main(string[] args)
        {
            string stringToCheck;
            char searchedChar = '.';
            int counter = 0;
            int i;

            Console.WriteLine("Write a sentence finishing with dot ");
            stringToCheck = Console.ReadLine();

            if (stringToCheck[stringToCheck.Length -1] != '.')
            {
                stringToCheck = stringToCheck + '.';
            }

            if (stringToCheck == ".")
            {
                Console.WriteLine("Empty string");
            }
            else
            {
                Console.WriteLine("Type a letter to find in your previous sentence");
                searchedChar = char.Parse(Console.ReadLine());
            }

            for ( i = 0; i < stringToCheck.Length; i++)
            {
                if (stringToCheck[i] == searchedChar)
                {
                    counter = counter + 1;
                }
            }

            if (counter > 0)
            {
                Console.WriteLine($"{searchedChar} appears {counter} times in your sentence");
            }
            else
            {
                Console.WriteLine("Not found");
            }
        }
    }
}
