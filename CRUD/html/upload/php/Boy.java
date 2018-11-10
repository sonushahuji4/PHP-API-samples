class Human
{
	public void eat()
	{
		System.out.println("Human is eating...");
	}
}
public class Boy extends Human
{
	public void eat()
	{
		System.out.println("Boy i s eating...");
	}
	public static void main(String[] agrs)
	{
		Boy b = new Boy();
		b.eat();
	}
}