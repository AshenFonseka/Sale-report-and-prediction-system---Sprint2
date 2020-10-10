using System;
using Microsoft.VisualStudio.TestTools.UnitTesting;
using SwinAdventure;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SwinAdventure.Tests
{
    [TestClass()]
    public class BagTests
    {
        [TestMethod()]
        public void TestBagLocatesItems()
        {
            Bag TestBag = new Bag(new string[] { "Test", "Bag" }, "Test Bag", "A Testing Bag");

            Item TestItem = new Item(new string[] { "salad", "pasta" }, "pasta salad", "a pasta salad");

            TestBag.Inventory.PutItem(TestItem);

            Assert.IsTrue(TestBag.Locate("salad") == TestItem);
        }

        [TestMethod()]
        public void TestBagLocater()
        {
            Bag TestBag = new Bag(new string[] { "Test", "Bag" }, "Test Bag", "A Testing Bag");

            Assert.IsTrue(TestBag.Locate("test") == TestBag);
        }

        [TestMethod()]
        public void TestBagLocatesNothing()
        {
            Bag TestBag = new Bag(new string[] { "Test", "Bag" }, "Test Bag", "A Testing Bag");

            Assert.IsTrue(TestBag.Locate("testfail") == null);
        }

        [TestMethod()]
        public void TestBagFullDescription()
        {
            Item TestItem = new Item(new string[] { "salad", "pasta" }, "pasta salad", "a pasta salad");

            Item TestItem2 = new Item(new string[] { "chicken", "baked" }, "baked chicken", "a baked chicken");

            Bag TestBag = new Bag(new string[] { "Test", "Bag" }, "Test Bag", "A Testing Bag");

            TestBag.Inventory.PutItem(TestItem);
            TestBag.Inventory.PutItem(TestItem2);

            Assert.IsTrue(TestBag.FullDescription().Contains("In " + TestBag.Name + "You are Carrying: \n"));

            Assert.IsTrue(TestBag.FullDescription().Contains("pasta salad" + "\t" + "A pasta salad salad." + "\n"));

            Assert.IsTrue(TestBag.FullDescription().Contains("baked chicken" + "\t" + "A baked chicken chicken." + "\n"));
        }

        [TestMethod()]
        public void TestBagInBag()
        {
            Bag b1 = new Bag(new string[] { "b1", "Bag" }, "Test Bag", "A Testing Bag");
            Bag b2 = new Bag(new string[] { "b2", "Bag" }, "b2 Bag", "A Testing Bag");

            Item TestItem = new Item(new string[] { "salad", "pasta" }, "pasta salad", "a pasta salad");
            Item TestItem2 = new Item(new string[] { "chicken", "baked" }, "baked chicken", "a baked chicken");

            b1.Inventory.PutItem(TestItem);
            b2.Inventory.PutItem(TestItem2);
            b1.Inventory.PutItem(b2);

            Assert.IsTrue(b1.Locate("salad") == TestItem);
            Assert.IsFalse(b1.Locate("chicken") == TestItem2);
            Assert.IsTrue(b1.Locate("b2") == b2);
        }
    }
}
