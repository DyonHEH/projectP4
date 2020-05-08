import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class persoon here.
 * 
 * @author (your name) 
 * @version (a version number or a date)
 */
public class persoon extends acteur
{
    /**
     * Act - do whatever the persoon wants to do. This method is called whenever
     * the 'Act' or 'Run' button gets pressed in the environment.
     */
    public void act() 
    {
        checkKeypress();
        Move();
    }    
    public void Move()
    {
        if (Greenfoot.isKeyDown("a")) 
        {
            turn(-3);
        }
        if (Greenfoot.isKeyDown("d")) 
        {
            turn(3);
        }
        if (Greenfoot.isKeyDown("w" ))
        {
            move(3);
        }
        if (Greenfoot.isKeyDown("s" ))
        {
            move(-3);
        }
    }
    public void checkKeypress()
    {
        if (Greenfoot.isKeyDown("left")) 
        {
            turn(-4);
        }
        if (Greenfoot.isKeyDown("right")) 
        {
            turn(4);
        }
    }
}
