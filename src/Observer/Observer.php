<?hh // strict

namespace Ytake\HHKata\Observer;

interface Observer {
  
  public function update<T>(Observable<T> $o): void;
}
