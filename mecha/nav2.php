 < d i v   c l a s s = " n a v b a r   n a v b a r - f i x e d - t o p " > 
     < d i v   c l a s s = " n a v b a r - i n n e r " > 
 	 < d i v   c l a s s = " c o n t a i n e r " > 
 	 
 	 < d i v   c l a s s = " b t n - g r o u p   p u l l - r i g h t " > 
 	 	 < f o r m   a c t i o n = " # "   i d = " l o g o u t f o r m "   s t y l e = " p o s i t i o n : r e l a t i v e ;   f l o a t : l e f t ;   m a r g i n : 0 p x "   m e t h o d = " p o s t " > 
 < ? p h p   
 	 i f ( i s s e t ( $ _ S E S S I O N [ ' u s e r ' ] ) ) {   
 ? > 
 	 	 	 < i n p u t   t y p e = " s u b m i t "   c l a s s = " b t n   b t n - w a r n i n g "   v a l u e = " S i g n   O u t   < ? p h p   i f ( i s s e t ( $ _ S E S S I O N [ ' u s e r ' ] ) )   e c h o   $ _ S E S S I O N [ ' u s e r ' ] ; ? > "   n a m e = " l o g o u t "   / > 
 < ? p h p   
 	 } e l s e { 
 ? > 
 	 	 	 < i n p u t   t y p e = " s u b m i t "   c l a s s = " b t n   b t n - w a r n i n g "   v a l u e = " L o g i n "   n a m e = " l o g i n "   o n c l i c k = " l o c a t i o n . h r e f = ' l o g i n . p h p ' ;   r e t u r n   f a l s e ; " / > 
 < ? p h p   
 	 } 
 ? > 
 	 	 < / f o r m > 
 	 < / d i v > 
 
 	     < d i v   c l a s s = " n a v - c o l l a p s e " > 
 	 	 < a   c l a s s = " b r a n d "   h r e f = " h o m e . p h p " > < b > M E C h A   d e   C o r n e l l < / b > < / a >   
 	 	 < u l   c l a s s = " n a v " > 
 	 	     < l i > < a   h r e f = " h o m e . p h p " > < b > H o m e < / b > < / a > < / l i > 
 	 	     < l i > < a   h r e f = " p o s t i n g s . p h p " > < b > P o s t s < / b > < / a > < / l i > 
 	 	     < l i > < a   h r e f = " m i n u t e s . p h p " > < b > M i n u t e s < / b > < / a > < / l i > 
 	 	     < l i > < a   h r e f = " a l u m n i . p h p " > < b > A l u m n i < / b > < / a > < / l i > 
 	 	     < l i > < a   h r e f = " c a l e n d a r . p h p " > < b > C a l e n d a r < / b > < / a > < / l i > 
 	 	 < / u l > 
 	     < / d i v > < ! - - / . n a v - c o l l a p s e   - - > 
 	 < / d i v > < ! - - / . c o n t a i n e r - - > 
     < / d i v > 
 < / d i v > < ! - - / . n a v b a r - - >