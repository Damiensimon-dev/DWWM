using System;

namespace _2_7_1
{
    class Program
    {
        static void Main(string[] args)
        {
            /*const int twenty = 20;
            int[] peopleAge = new int[twenty];
            int i;
            int youngCounter = 0;

            Console.WriteLine($"Enter the age of {twenty} persons one after another");

            for ( i = 0; i < twenty; i++)
            {
                peopleAge[i] = int.Parse(Console.ReadLine());
            }

            for ( i = 0;  i < peopleAge.Length;  i++)
            {
                if (peopleAge[i] < twenty)
                {
                    youngCounter = youngCounter + 1;
                }
            }
            Console.WriteLine($"There are {youngCounter} young among the people");*/


            /*Version Opti Z'onions*/

            const int twenty = 20;
            int i;
            int yougCounter = 0;
            int[] peopleAge = new int[twenty];

            Console.WriteLine($"Enter the age of {twenty} persons one after another");

            for ( i = 0; i < twenty ; i++)
            {
                if (int.Parse(Console.ReadLine()) < twenty)
                {
                    yougCounter = yougCounter + 1;
                }
            }

            Console.WriteLine($"The are {yougCounter} young among the people ");
        }
    }
}
