using System;

namespace jeu
{
    class Program
    {
        static void Main(string[] args)
        {
            
            
                int numberOfTemperature = int.Parse(Console.ReadLine()); // the number of temperatures to analyse
                string[] listTemperature = Console.ReadLine().Split(' ');
                for (int indexTemperatures = 0; indexTemperatures < numberOfTemperature; indexTemperatures++)
                {
                    int t = int.Parse(listTemperature[indexTemperatures]);// a temperature expressed as an integer ranging from -273 to 5526
                }

                // Write an answer using Console.WriteLine()
                // To debug: Console.Error.WriteLine("Debug messages...");

                Console.WriteLine("result");
            
        }
    }
}
