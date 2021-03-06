# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: jgeslin <jgeslin@student.42.fr>            +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2016/01/15 12:36:55 by jgeslin           #+#    #+#              #
#    Updated: 2016/05/31 14:24:31 by jgeslin          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

SRC_PATH = ./sources/
OBJ_PATH = ./obj/
INC_PATH = ./includes/
INC_LIBFT_PATH = ./libft/includes/
LIB_PATH = ./libft/
MLX_PATH = ./minilibx_macos/
MLX = -L minilibx_macos -lmlx -framework OpenGL -framework Appkit

NAME = fractol
CC = gcc
CFGLAGS = -Werror -Wextra -Wall -O3

SRC_NAME = main.c\
		   init.c\
		   key.c\
		   mouse.c\
		   julia.c\
		   mandelbrot.c\
		   mandelbrot1.c\
		   burningship.c\
		   buddahbrot.c\

OBJ_NAME = $(SRC_NAME:.c=.o)
LIB_NAME = libft.a

SRC = $(addprefix $(SRC_PATH), $(SRC_NAME))
OBJ = $(addprefix $(OBJ_PATH), $(OBJ_NAME))
INC = $(addprefix -I,$(INC_PATH))
INC_LIBFT = $(addprefix -I,$(INC_LIBFT_PATH))
LIB = $(LIB_PATH)$(LIB_NAME)

.PHONY: clean fclean re all ready

all: $(NAME)

$(NAME): $(OBJ)
	@make -C $(LIB_PATH)
	@make -C $(MLX_PATH)
	@$(CC) $(CFLAGS) $(LIB) $(INC_LIBFT) $(INC) $(MLX) $(OBJ) -o $(NAME) #-g -fsanitize=address
	@printf '\033[35m[ ✔ ] %s\n\033[0m' "$(NAME)'s MiniOns Created 😈"
	@printf '\033[32m[ ✔ ] %s\n\033[0m' "$(NAME) is done ! 😎"

$(OBJ_PATH)%.o: $(SRC_PATH)%.c
	@mkdir $(OBJ_PATH) 2>/dev/null || echo "" > /dev/null
	@$(CC) $(CFLAGS) $(INC_LIBFT) $(INC) -o $@ -c $<
	@printf '\033[33m[ ✔ ] %s\n\033[0m' "$< 😈"

clean:
	@make clean -C $(LIB_PATH)
	@make clean -C $(MLX_PATH)
	@rm -f $(OBJ)
	@rmdir $(OBJ_PATH) 2> /dev/null || echo "" > /dev/null
	@printf '\033[31m[ ✔ ] %s\n\033[0m' "$(NAME)'s MiniOns Clean 😵"

fclean: clean
	@make fclean -C $(LIB_PATH)
	@rm -f $(NAME)
	@printf '\033[31m[ ✔ ] %s\n\033[0m' "$(NAME) Fclean R.I.P ☠"

ready: re clean
	@printf '\033[32m[ ✔ ] %s\n\033[0m' "$(NAME) is ready ! 🍺  and cleaned poop 💩"

re: fclean all
	@printf '\033[32m[ ✔ ] %s\n\033[0m' "Drink's all round ! 🍺 🍺 🍺 🍺 🍺"
