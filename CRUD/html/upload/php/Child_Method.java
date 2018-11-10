class Parent_Method
{
	void display()
	{
		System.out.println("Parent Method....");
	}
}
public class Child_Method extends Parent_Method
{
	void display()
	{
		System.out.println("Child Method...");
	}

	void show()
	{
		super.display();
		this.display();
	}
	public static void main(String[] args)
	{
		new Child_Method().show();
	}
}