import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class MyWorld here.
 * 
 * @author (your name) 
 * @version (a version number or a date)
 */
public class MyWorld extends World
{

    /**
     * Constructor for objects of class MyWorld.
     * 
     */
    public MyWorld()
    {    
        super(1000, 666, 1);
        addObject();
    }
    public void addObject() 
    {
    
    addObject(new persoon(), Greenfoot.getRandomNumber(1000), Greenfoot.getRandomNumber(666));
    addObject(new virus(), Greenfoot.getRandomNumber(1000), Greenfoot.getRandomNumber(666));
    addObject(new virus(), Greenfoot.getRandomNumber(1000), Greenfoot.getRandomNumber(666));
    addObject(new virus(), Greenfoot.getRandomNumber(1000), Greenfoot.getRandomNumber(666));
    addObject(new virus(), Greenfoot.getRandomNumber(1000), Greenfoot.getRandomNumber(666));
    addObject(new virus(), Greenfoot.getRandomNumber(1000), Greenfoot.getRandomNumber(666));
    } 
}
