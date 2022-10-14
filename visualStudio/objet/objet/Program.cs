using System;

namespace objet
{
    class Program
    {
        static void Main(string[] args)
        {
            Point2D point1 = new Point2D(3, 4);

            Point2D point2 = new Point2D(10, 3);

            Point3D point3 = new Point3D(10, 1, 20);

            Console.WriteLine(point3.Y + " " + point3.X + " " + point3.Z);

            Console.WriteLine(point1.Y + " " + point1.X);

            Console.WriteLine(point2.Y + " " + point2.X);



        }
    }
}
