<?hh // strict

namespace Ytake\HHKata\Observer;

interface Observable<T> {

  public function addObserver(Observer $o): void;

  protected function cleanChanged(): void;

  public function countObservers(): int;

  public function deleteObserver(Observer $o): void;

  public function deleteObservers(): void;

  public function hasChanged(): bool;

  public function notifyObservers(): void;
  
  protected function setChanged(): void;
}
