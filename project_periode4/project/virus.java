import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)
import java.util.List;

/**
 * Write a description of class virus here.
 * 
 * @author (your name) 
 * @version (a version number or a date)
 */
public class virus extends acteur
{
    /**
     * Act - do whatever the persoon wants to do. This method is called whenever
     * the 'Act' or 'Run' button gets pressed in the environment.
     */
    public void act() 
    {
        move(2);
        turnToPersoon();
        lookForPersoon();
    }
    
    /**
     * Turn the Cop 
     */
    private void turnToPersoon()
    {
        persoon target = getTarget();
        if(target != null) {
            int dx = target.getX() - getX();
            int dy = target.getY() - getY();
            double angle = Math.toDegrees(Math.atan2(dy, dx));
            setRotation((int)angle);
        }
    }
    
    private persoon getTarget()
    {
        List<persoon> p = getObjectsInRange(1200, persoon.class);
        if(p.size() > 0)
            return p.get(0);
        else
            return null;
    }
    
    public void lookForPersoon()
    {
        if (canSee(persoon.class) ) 
        {
            eat(persoon.class);
            Greenfoot.stop();    
   
        }
    }  
    
    public void istouchting()
    {
        if (isTouching(virus.class))
        {
            setImage("image2.png");
        }
    }
}

