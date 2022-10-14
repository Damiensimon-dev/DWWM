using System;

namespace _2_7_2
{
    class Program
    {
        static void Main(string[] args)
        {
            const int twenty = 20;
            int[] peopleAge = new int[twenty];
            int i;
            int youngCounter = 0;
            int oldCounter = 0;
            int twentyCounter = 0;

            Console.WriteLine($"Enter the age of {twenty} persons one after another");

            for ( i = 0; i < twenty; i++)
            {
                peopleAge[i] = int.Parse(Console.ReadLine());
            }
            for ( i = 0; i < peopleAge.Length; i++)
            {
                if (peopleAge[i] < twenty)
                {
                    youngCounter = youngCounter + 1;
                }
                else if (peopleAge[i] > twenty)
                {
                    oldCounter = oldCounter + 1;
                }
                else
                {
                    twentyCounter = twentyCounter + 1;
                }
            }

            if (youngCounter == 20)
            {
                Console.WriteLine("Everybody is less than 20");
            }
            else if (oldCounter == 20)
            {
                Console.WriteLine("Everybody is more than 20");
            }
            else
            {
                Console.WriteLine("There are " + youngCounter + " young people\n"
        + "There are " + oldCounter + " old people\n" + "There are " + twentyCounter + " people who are 20");
            }
        }
    }
}
