 < ? p h p 
 	 s e s s i o n _ s t a r t ( ) ; 
 	 i f   ( i s s e t ( $ _ P O S T [ " s u b m i t " ] ) )   { 
 	 	 i n c l u d e ( " c o n f i g / c o n f i g . p h p " ) ; 
 	 	 $ m y s q l i =   n e w   m y s q l i ( $ h o s t ,   $ u s e r n a m e ,   $ p a s s w o r d ,   $ d a t a b a s e ) ; 
 	 	 
 	 	 $ u s e r   =   s t r i p _ t a g s ( s u b s t r ( $ _ P O S T [ ' u s e r ' ] , 0 ,   1 0 0 ) ) ; 
 	 	 $ p a s s   =   h a s h ( ' s h a 2 5 6 ' , $ _ P O S T [ ' p a s s w o r d ' ] ) ; 
 	 	 
 	 	 $ q u e r y   =   " S E L E C T   U s e r ,   P a s s w o r d ,   P r i v i l e g e   F R O M   U s e r   W H E R E   U s e r = ' $ u s e r '   A N D   P a s s w o r d = ' $ p a s s ' " ; 
 	 	 $ r e s u l t   =   $ m y s q l i - > q u e r y ( $ q u e r y ) ; 
 	 	 i f ( $ r o w   =   $ r e s u l t - > f e t c h _ r o w ( ) ) { 
 	 	 	 $ _ S E S S I O N [ ' u s e r ' ] =   $ r o w [ 2 ] ; 
 	 	 	 h e a d e r ( " L o c a t i o n :   p o s t i n g s . p h p " ) ; 
 	 	 	 e x i t ( ) ; 
 	 	 } e l s e   { 
 	 	 	 e c h o   " < d i v   c l a s s = ' a l e r t   a l e r t - e r r o r ' > 
 	 	 	 < p > I n c o r r e c t   U s e r n a m e   o r   P a s s w o r d .   P l e a s e   t r y   a g a i n . < / p > 
 	 	 	 < / d i v > " ; 
 	 	 } 
 	 } 
 ? > 
 < ! D O C T Y P E   h t m l   P U B L I C   " - / / W 3 C / / D T D   X H T M L   1 . 0   S t r i c t / / E N "   " h t t p : / / w w w . w 3 . o r g / T R / x h t m l 1 / D T D / x h t m l 1 - s t r i c t . d t d " > 
 < h t m l   x m l n s = " h t t p : / / w w w . w 3 . o r g / 1 9 9 9 / x h t m l " > 
     < h e a d > 
         < t i t l e > L o g i n < / t i t l e > 
         < ! - -   L e   s t y l e s   - - > 
         < l i n k   h r e f = " c s s / b o o t s t r a p . c s s "   r e l = " s t y l e s h e e t " / > 
         < s t y l e   t y p e = " t e x t / c s s " > 
             b o d y   { 
                 p a d d i n g - t o p :   6 0 p x ; 
                 p a d d i n g - b o t t o m :   4 0 p x ; 
             } 
         < / s t y l e > 
         < s c r i p t   s r c = " h t t p s : / / a j a x . g o o g l e a p i s . c o m / a j a x / l i b s / j q u e r y / 1 . 7 . 1 / j q u e r y . m i n . j s " > < / s c r i p t >   
 	 < s c r i p t   s r c = " b o o t s t r a p . m i n . j s " > < / s c r i p t > 
 	 < s c r i p t   t y p e = " t e x t / j a v a s c r i p t " > 
 	 	   $ ( ' . c a r o u s e l ' ) . c a r o u s e l ( ) ; 
 	 	   $ ( " . c o l l a p s e " ) . c o l l a p s e ( ) ; 
 	 < / s c r i p t > 
     < / h e a d > 	 
     < b o d y > 
 < ? p h p   
 r e q u i r e ( " n a v 1 . p h p " ) ; 
 ? > 
         < p > < / p > 
         < p > < / p > 
         < d i v   c l a s s = " r o w " > 
         < d i v   c l a s s = " h e r o - u n i t   s p a n 4   o f f s e t 6 "   s t y l e = " c o l o r : b l a c k ;   p o s i t i o n : a b s o l u t e ;   t o p : 2 5 % " > 
         	 < h 3 >   M E C h A   L o g i n   < / h 3 > 
         	 < f o r m   a c t i o n = " "   m e t h o d = " p o s t " > 
                           < p > U s e r n a m e :   < i n p u t   t y p e = " t e x t "   n a m e = " u s e r "   / > < b r   / > 
                           P a s s w o r d :   < i n p u t   t y p e = " p a s s w o r d "   n a m e = " p a s s w o r d "   / > 
                           < i n p u t   t y p e = " s u b m i t "   n a m e = " s u b m i t "   v a l u e = " s i g n   i n " / > < / p > 
         	 < / f o r m > 
         < / d i v > 
         < / d i v > 
         < / b o d y > 
 < / h t m l >