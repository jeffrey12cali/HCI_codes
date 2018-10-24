function findNextSquare(sq) {
  // Return the next square if sq if a perfect square, -1 otherwise
  let x = Math.sqrt(sq);
  if (x%1 === 0)
     return Math.pow(x+1,2);
  return -1;
}
