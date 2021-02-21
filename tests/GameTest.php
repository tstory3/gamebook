
<?php
use PHPUnit\Framework\TestCase;

require __DIR__ . "/../src/Entity/Game.php";
require __DIR__ . "/../src/Entity/Rating.php";
require __DIR__ . "/../src/Entity/User.php";

class GameTest extends TestCase {

   public function testImage_WithNull_ReturnsPlaceholder()  {
       $game = new Game();
       $game->setImagePath(null);
       $this->assertEquals('images/placeholder.png', $game->getImagePath());
   }

   public function testImage_WithPath_ReturnsPath() {

   }

   public function testAverageScore_WithoutRatings_ReturnsNull() {

   }

   public function testAverageScore_With6And8_Returns7() {

   }

   public function testAverageScore_WithNullAnd5_Returns5()
   {
       $rating1 = $this->createMock(Rating::class);
       $rating1->method('getScore')->willReturn(null);

       $rating2 = $this->createMock(Rating::class);
       $rating2->method('getScore')->willReturn(5);

       $game = $this->getMockBuilder(Game::class)
           ->setMethods(array('getRatings'))
           ->getMock();
       $game->method('getRatings')->willReturn([$rating1, $rating2]);

       $this->assertEquals(5, $game->getAverageScore());
   }

   public function testIsRecommended_WithCompatibility2AndScore10_ReturnsFalse()
   {
   }

   public function testIsRecommended_WithCompatibility10AndScore10_ReturnsTrue()
   {
   }
}
