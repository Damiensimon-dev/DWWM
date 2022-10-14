using System;

namespace _3_6
{
    class Program
    {

        static void Main(string[] args)
        {
            string wordToFind;
            char[] foundLetters;
            char suggestedLetter;
            const int maxAttempts = 6;
            const int minWordLength = 5;
            int attempsCounter = 0;
            int i;
            bool noVictory = true;
            bool noMistake;

            do
            {
                Console.WriteLine($"Enter a word with {minWordLength} or more characters");
                wordToFind = Console.ReadLine();
            } while (wordToFind.Length < minWordLength);

            foundLetters = FirstAndLastLetterOfWord(wordToFind);

            Console.WriteLine($"{foundLetters}");
            

        }

        private static char[] FirstAndLastLetterOfWord(string wordToFind)
        {
            char[] result;
            const string dash = "-";

           
        }
    }
}
